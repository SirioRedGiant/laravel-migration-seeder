<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellone Partenze</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #111;
            color: #ffb703;
            font-family: "Share Tech Mono", monospace;
            font-weight: 400;
            font-style: normal;
        }

        .board-title {
            color: #fb8500;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .table-dark {
            --bs-table-bg: #222;
            --bs-table-color: #ffb703;
            border-color: #444;
        }


        .status-cancelled {
            color: #e63946;
        }


        .status-late {
            color: #f4a261;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center board-title mb-4">Departures / Dèparts / Salidas / Partenze</h1>

        <div class="table-responsive">
            <table class="table table-dark table-striped align-middle">
                <thead>
                    <tr>
                        <th>Codice</th>
                        <th>Azienda</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Binario</th>
                        <th>Orario Partenza</th>
                        <th>Stato</th>
                        <th>Ritardo</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- " @forelse " è come @foreach, ma consente di avere la condizione @empty al suo interno per poter gestire il caso in cui non ci siano treni --}}
                    @forelse ($trains as $train)
                    <tr>
                        <td><strong>{{ $train->train_code }}</strong></td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->platform ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->departure_time)->format('d/m/Y H:i') }}</td>

                        <td>
                            @if ($train->is_cancelled)
                            <span class="status-cancelled">CANCELLATO</span>
                            @elseif (!$train->is_on_time)
                            <span class="status-late">RITARDO</span>
                            @else
                            <span style="color: #2a9d8f;">IN ORARIO</span> @endif
                        </td>

                        <td class="text-center">
                            @if ($train->is_cancelled)
                            <span class="text-muted">-</span>
                            @elseif ($train->delay_minutes > 0)
                            <span class="status-late">+{{ $train->delay_minutes }}'</span>
                            @else
                            <span style="color: #2a9d8f; font-size: 1.2rem;">✔</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Nessun treno in partenza previsto per oggi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-5 p-4 rounded" style="background-color: #222; border: 1px solid #444;">
            <h4 class="board-title mb-3" style="font-size: 1.2rem;">Statistiche del Mese</h4>

            <p class="mb-1">
                <span style="color: #888;">Media ritardi globale:</span>
                <strong>{{ number_format($averageDelay, 1) }} minuti</strong>
            </p>

            <p class="mb-0">
                <span style="color: #888;">Treno più virtuoso del mese:</span>
                @if($bestTrain)
                <strong style="color: #2a9d8f;">Codice {{ $bestTrain->train_code }}</strong>
                <span style="font-size: 0.9rem;">(Ritardo max: {{ $bestTrain->delay_minutes }}')</span>
                @else
                <span class="text-muted">Dati non ancora disponibili.</span>
                @endif
            </p>
        </div>

    </div>

</body>


</html>