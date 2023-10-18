<?php
// Fajar Arrohman Nur Sahab 6706223015
namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class UsersDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
        ->addColumn('action', function (User $user) {
            return '<div class="btn-group btn-group-sm flex gap-4" role="group" aria-label="Action Buttons">
                        <a href="/users/' . $user->id . '/edit" class="btn btn-gray">Edit</a>
                        <a href="/userView/' . $user->id . '" class="btn btn-gray">View</a>
                        <a href="/users/' . $user->id . '/delete" class="btn btn-gray">Delete</a>
                    </div>';
        })
        ->addColumn('jenisKelamin', function (User $user) {
            switch ($user->jenisKelamin) {
                case 0:
                    return 'Laki-laki';
                case 1:
                    return 'Perempuan';
                default:
                    return '-';
            }
        });
        // ->setRowId('id');
    }

    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('users-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('print'),
                    ]);
                }

    public function getColumns(): array
    {
        return [
            Column::make('fullName'),
            Column::make('email'),
            Column::make('username'),
            Column::make('address'),
            Column::make('phoneNumber'),
            Column::make('birthDate'),
            Column::make('jenisKelamin'),
            Column::computed('action')
                            ->exportable(false)
                            ->printable(false)
                            ->width(60)
                            ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'Users_'.date('YmdHis');
    }
}


