<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends Factory<Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //todo -> l'orario di arrivo dipende dall'orario di partenza. Per rendere i dati circa realistici, bisogna creare prima la data di partenza, salvarla in una variabile, e poi calcolare la data/orario di arrivo aggiungendo una durata di viaggio plausibile (30 minuti <-> 8 ore).

        //^ orario di partenza
        $departureTime = fake()->dateTimeBetween('now', '+1 days');

        //^ l'arrivo 
        $arrivalTime = Carbon::parse($departureTime)->addMinutes(fake()->numberBetween(30, 480)); //tempo in minuti 60*8

        //^ elenco di stazioni ferroviarie
        $stazioni = [
            'Milano Centrale',
            'Roma Termini',
            'Firenze Santa Maria Novella',
            'Torino Porta Nuova',
            'Bologna Centrale',
            'Napoli Centrale',
            'Venezia Santa Lucia',
            'Verona Porta Nuova',
            'Genova Piazza Principe',
            'Bergamo',
            'Pisa Centrale',
            'Bari Centrale',
            'Padova',
            'Trieste Centrale'
        ];

        //^ stazione di partenza
        $departureStation = fake()->randomElement($stazioni);

        //^ stazione di arrivo
        $arrivalStation = fake()->randomElement(array_diff($stazioni, [$departureStation]));

        return [

            // sceglie a caso da un array per avere aziende realistiche
            'company' => fake()->randomElement(['Trenitalia', 'Italo', 'Trenord', 'Frecciarossa']),

            // città casuali per le stazioni --> usando l'array $stazioni (i nomi casuali non mi piacevano) --> evito la possibilità che la stazione di partanza venga ripescata
            'departure_station' => $departureStation,
            'arrival_station' => $arrivalStation,

            // orari casuali (partenza tra oggi e domani, arrivo tra domani e dopodomani)
            'departure_time' => $departureTime,
            'arrival_time' => $arrivalTime,

            // genera un codice tipo "XY-1234" e garantisce che sia unico
            'train_code' => fake()->unique()->bothify('??-####'),

            // binario da 1 a 15
            'platform' => fake()->numberBetween(1, 26),

            // numero carrozze da 4 a 12
            'carriages_number' => fake()->numberBetween(4, 32),

            // booleani
            'is_on_time' => fake()->boolean(80), // 80% di probabilità che sia in orario
            'is_cancelled' => fake()->boolean(5), // 5% di probabilità che sia cancellato

            // ritardo 
            'delay_minutes' => fake()->numberBetween(0, 120),
        ];
    }
}
