<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\DataTables\UsersDataTable;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $users = User::all();
    //     return view('user.daftarPengguna', compact('users'));
    // }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'agama' => ['required', 'string', 'max:20'],
            'jeniskelamin' => ['required', 'integer', 'max:4'],
        ]);

        DB::beginTransaction();

        try {
            User::create([
                'username' => $request->username,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'address' => $request->address,
                'birthdate' => $request->birthdate,
                'phoneNumber' => $request->phoneNumber,
                'agama' => $request->agama,
                'jeniskelamin' => $request->jeniskelamin,
            ]);

            DB::commit();

            return redirect()->route("user.daftarPengguna")->with('success', "Added user successfully");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route("user.daftarPengguna")->with('error', "Added user failed");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("user.infoPengguna", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("user.editPengguna", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    //FAJAR ARROHMAN NS 6706223015
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                "username" => ["required"],
                "fullname" => ["required"],
                "email" => ["required"],
                "address" => ["required"],
                "birthdate" => ["required"],
                "phoneNumber" => ["required"],
                "agama" => ["required"],
                "jeniskelamin" => ["required"],
            ]);

            $user = User::findOrFail($request->id)->update([
                "username" => $request->username,
                "fullname" => $request->fullname,
                "email" => $request->email,
                "address" => $request->address,
                "birthdate" => $request->birthdate,
                "phoneNumber" => $request->phoneNumber,
                "agama" => $request->agama,
                "jeniskelamin" => $request->jeniskelamin,
            ]);

            DB::commit();

            return redirect()->route("user.daftarPengguna")->with('success', "Updated user successfully");
        } catch (\Exception $e) {
            dd($e);

            DB::rollBack();
            return redirect()->route("user.daftarPengguna")->with('error', "Updated user failed");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //FAJAR ARROHMAN NUR SAHAB 6706223015
}
