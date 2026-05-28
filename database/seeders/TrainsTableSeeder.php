<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainsData = [
            // --- 15 TRENI SONDRIO <-> MILANO CENTRALE => 28 Maggio 2026 ---
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 05:41:00',
                'arrival_time' => '2026-05-28 07:40:00',
                'train_code' => 'RE_2561',
                'platform' => '1',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 06:20:00',
                'arrival_time' => '2026-05-28 08:20:00',
                'train_code' => 'RE_2562',
                'platform' => '8',
                'carriages_number' => 5,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 10
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 06:41:00',
                'arrival_time' => '2026-05-28 08:40:00',
                'train_code' => 'RE_2563',
                'platform' => null,
                'carriages_number' => 7,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 07:20:00',
                'arrival_time' => '2026-05-28 09:20:00',
                'train_code' => 'RE_2564',
                'platform' => '9',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 07:41:00',
                'arrival_time' => '2026-05-28 09:40:00',
                'train_code' => 'RE_2565',
                'platform' => '2',
                'carriages_number' => 8,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 25
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 09:20:00',
                'arrival_time' => '2026-05-28 11:20:00',
                'train_code' => 'RE_2566',
                'platform' => null,
                'carriages_number' => 5,
                'is_on_time' => false,
                'is_cancelled' => true,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 09:41:00',
                'arrival_time' => '2026-05-28 11:40:00',
                'train_code' => 'RE_2561',
                'platform' => '1',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 12:20:00',
                'arrival_time' => '2026-05-28 14:20:00',
                'train_code' => 'RE_2562',
                'platform' => '7',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 11:41:00',
                'arrival_time' => '2026-05-28 13:40:00',
                'train_code' => 'RE_2567',
                'platform' => '3',
                'carriages_number' => 7,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 5
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 14:20:00',
                'arrival_time' => '2026-05-28 16:20:00',
                'train_code' => 'RE_2568',
                'platform' => '8',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 13:41:00',
                'arrival_time' => '2026-05-28 15:40:00',
                'train_code' => 'RE_2563',
                'platform' => null,
                'carriages_number' => 8,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 16:20:00',
                'arrival_time' => '2026-05-28 18:20:00',
                'train_code' => 'RE_2570',
                'platform' => '9',
                'carriages_number' => 7,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 15
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 15:41:00',
                'arrival_time' => '2026-05-28 17:40:00',
                'train_code' => 'RE_2571',
                'platform' => '2',
                'carriages_number' => 9,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Sondrio',
                'departure_time' => '2026-05-28 18:20:00',
                'arrival_time' => '2026-05-28 20:20:00',
                'train_code' => 'RE_2572',
                'platform' => '7',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 17:41:00',
                'arrival_time' => '2026-05-28 19:40:00',
                'train_code' => 'RE_2573',
                'platform' => '1',
                'carriages_number' => 6,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 12
            ],

            // --- 2 TRENI EXTRA => 28 Maggio 2026 ---
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-28 10:00:00',
                'arrival_time' => '2026-05-28 12:59:00',
                'train_code' => 'FR_9520',
                'platform' => '15',
                'carriages_number' => 11,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '2026-05-28 08:40:00',
                'arrival_time' => '2026-05-28 14:45:00',
                'train_code' => 'IT_8112',
                'platform' => null,
                'carriages_number' => 12,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 35
            ],

            // --- TRENI PASSATI ---
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Bergamo',
                'arrival_station' => 'Brescia',
                'departure_time' => '2026-05-25 08:15:00',
                'arrival_time' => '2026-05-25 09:10:00',
                'train_code' => 'RV_1020',
                'platform' => '4',
                'carriages_number' => 4,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Como Lago',
                'departure_time' => '2026-05-26 14:30:00',
                'arrival_time' => '2026-05-26 15:30:00',
                'train_code' => 'RE_3005',
                'platform' => '2',
                'carriages_number' => 6,
                'is_on_time' => false,
                'is_cancelled' => false,
                'delay_minutes' => 5
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Venezia Santa Lucia',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '2026-05-27 09:05:00',
                'arrival_time' => '2026-05-27 13:00:00',
                'train_code' => 'IT_8990',
                'platform' => '13',
                'carriages_number' => 10,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],

            // --- TRENI FUTURI ---
            [
                'company' => 'Trenord',
                'departure_station' => 'Lecco',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-05-29 07:00:00',
                'arrival_time' => '2026-05-29 07:40:00',
                'train_code' => 'RE_2800',
                'platform' => '3',
                'carriages_number' => 8,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Parigi Gare de Lyon',
                'departure_time' => '2026-05-29 06:25:00',
                'arrival_time' => '2026-05-29 13:22:00',
                'train_code' => 'FR_9292',
                'platform' => '12',
                'carriages_number' => 12,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Firenze S.M.N.',
                'departure_time' => '2026-05-30 11:15:00',
                'arrival_time' => '2026-05-30 12:00:00',
                'train_code' => 'RV_4040',
                'platform' => '6',
                'carriages_number' => 5,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '2026-05-31 15:30:00',
                'arrival_time' => '2026-05-31 20:45:00',
                'train_code' => 'IT_8120',
                'platform' => null,
                'carriages_number' => 14,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Sondrio',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2026-06-01 06:41:00',
                'arrival_time' => '2026-06-01 08:40:00',
                'train_code' => 'RE_2563',
                'platform' => '1',
                'carriages_number' => 7,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '2026-06-02 08:00:00',
                'arrival_time' => '2026-06-02 12:10:00',
                'train_code' => 'FR_9511',
                'platform' => '15',
                'carriages_number' => 11,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Tiburtina',
                'arrival_station' => 'Pescara',
                'departure_time' => '2026-06-05 16:30:00',
                'arrival_time' => '2026-06-05 19:45:00',
                'train_code' => 'IC_701',
                'platform' => '4',
                'carriages_number' => 6,
                'is_on_time' => true,
                'is_cancelled' => false,
                'delay_minutes' => 0
            ],
        ];

        foreach ($trainsData as $data) {
            $train = new Train();
            $train->company = $data['company'];
            $train->departure_station = $data['departure_station'];
            $train->arrival_station = $data['arrival_station'];
            $train->departure_time = $data['departure_time'];
            $train->arrival_time = $data['arrival_time'];
            $train->train_code = $data['train_code'];
            $train->platform = $data['platform'];
            $train->carriages_number = $data['carriages_number'];
            $train->is_on_time = $data['is_on_time'];
            $train->is_cancelled = $data['is_cancelled'];
            $train->delay_minutes = $data['delay_minutes'];
            $train->save();
        }
    }
}
