<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\Donor;
// use App\Models\Job;
use App\Models\User;
use BezhanSalleh\FilamentShield\Traits\HasWidgetShield;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    use HasWidgetShield;

    protected static ?string $pollingInterval = null;

    protected function getStats(): array
    {
        $totalCandidates = Donor::whereHas('roles', fn ($q) => $q->where('name', 'candidate'))->count();

        return [
            Stat::make('candidates', Donor::whereHas('roles', fn ($q) => $q->where('name', 'candidate'))
                ->where('status', \App\Enums\Status::ACTIVE)
                ->count())
                ->description('Out of '.$totalCandidates.' candidates')
                ->label('Active Donors'),
            Stat::make('companies', Donor::whereHas('roles', fn ($q) => $q->where('name', 'company'))->count())
                ->label('Total Camping'),
            Stat::make('users', User::whereHas('roles', fn ($q) => $q->whereNotIn('name', ['company', 'candidate']))
                ->count())
                ->label('Users'),
            // Stat::make('Jobs', Job::count()),
            // Stat::make('Active Jobs', Job::active()->count()),
            // Stat::make('Jobs Pending for Approval', Job::where('status', \App\Enums\Status::PENDING)->count()),
            // Stat::make('Expired Jobs', Job::where('status', \App\Enums\Status::EXPIRED)->count()),
            // Stat::make('Rejected Jobs', Job::where('status', \App\Enums\Status::REJECTED)->count()),
            // Stat::make('Inactive Jobs', Job::where('status', \App\Enums\Status::INACTIVE)->count()),
        ];
    }
}
