<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;
    protected function getStats(): array
    {
        $startDate = is_null($this->filters['startDate']) ? now()->startOfMonth() : Carbon::parse($this->filters['startDate']);

        $endDate = is_null($this->filters['endDate']) ? now()->endOfMonth() : Carbon::parse($this->filters['endDate']);
        
        $pemasukan = Transaction::incomes()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');
        
        $pengeluaran = Transaction::expenses()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');
        
        // return [
        //     Stat::make('Total Pemasukan', 'Rp.'.' '.$pemasukan),
        //     Stat::make('Total Pengeluaran', 'Rp.'.' '.$pengeluaran),
        //     Stat::make('Selisih','Rp.'.' '.$pemasukan - $pengeluaran),
        // ];

        return [
            Stat::make('Total Pemasukan',  $pemasukan)
                ->color('success')
                ->icon('heroicon-o-arrow-up-tray')
                ->description('Percentage of total income'),

            Stat::make('Total Pengeluaran', $pengeluaran)
                ->color('danger')
                ->icon('heroicon-o-arrow-down-tray')
                ->description('Percentage of total expenses'),

            Stat::make('Difference', $pemasukan - $pengeluaran)
                ->color($pemasukan - $pengeluaran > 0 ? 'success' : 'danger')
                ->icon($pemasukan - $pengeluaran > 0 ? 'heroicon-o-arrow-up-tray' : 'heroicon-o-arrow-down-tray')
                ->description($pemasukan - $pengeluaran > 0 ? 'You are in profit' : 'You are in loss'),
        ];
    }
}
