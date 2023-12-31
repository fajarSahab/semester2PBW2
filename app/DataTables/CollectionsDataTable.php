<?php
// Fajar Arrohman Nur Sahab 6706223015
namespace App\DataTables;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CollectionsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function (Collection $Collection) {
            return '<div class="btn-group btn-group-sm flex gap-4" role="group" aria-label="Action Buttons">
                        <a href="/koleksi/' . $Collection->id . '/edit" class="btn btn-gray">Edit</a>
                        <a href="/koleksiView/' . $Collection->id . '" class="btn btn-gray">View</a>
                        <a href="/koleksi/' . $Collection->id . '/delete" class="btn btn-gray">Delete</a>
                    </div>';
        })
        ->addColumn('jenis', function (Collection $Collection) {
            switch ($Collection->jenis) {
                case 1:
                    return 'Buku';
                case 2:
                    return 'Majalah';
                case 3:
                    return 'Cakram Digital';
                default:
                    return '-';
            }
        });

            // ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Collection $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Collection $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('collections-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            // Column::make('id'),
            Column::make('nama'),
            Column::make('jenis'),
            Column::make('jumlahAwal'),
            Column::make('jumlahSisa'),
            Column::make('jumlahKeluar'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Collections_' . date('YmdHis');
    }
}

// Fajar Arrohman Nur Sahab 6706223015
