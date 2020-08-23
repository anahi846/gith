<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Puesto\BulkDestroyPuesto;
use App\Http\Requests\Admin\Puesto\DestroyPuesto;
use App\Http\Requests\Admin\Puesto\IndexPuesto;
use App\Http\Requests\Admin\Puesto\StorePuesto;
use App\Http\Requests\Admin\Puesto\UpdatePuesto;
use App\Models\Puesto;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PuestoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPuesto $request
     * @return array|Factory|View
     */
    public function index(IndexPuesto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Puesto::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Edad', 'FechaIngreso', 'Puesto'],

            // set columns to searchIn
            ['id', 'Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Puesto']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.puesto.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.puesto.create');

        return view('admin.puesto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePuesto $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePuesto $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Puesto
        $puesto = Puesto::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/puestos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/puestos');
    }

    /**
     * Display the specified resource.
     *
     * @param Puesto $puesto
     * @throws AuthorizationException
     * @return void
     */
    public function show(Puesto $puesto)
    {
        $this->authorize('admin.puesto.show', $puesto);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Puesto $puesto
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Puesto $puesto)
    {
        $this->authorize('admin.puesto.edit', $puesto);


        return view('admin.puesto.edit', [
            'puesto' => $puesto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePuesto $request
     * @param Puesto $puesto
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePuesto $request, Puesto $puesto)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Puesto
        $puesto->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/puestos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/puestos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPuesto $request
     * @param Puesto $puesto
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPuesto $request, Puesto $puesto)
    {
        $puesto->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPuesto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPuesto $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Puesto::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
