<?php

namespace App\Http\Controllers;

use App\Models\DocumentUser;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentUserController extends Controller
{
    // TODO примерно тут принцип единственной ответственности и умер. Нужно бы исправить
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function create(Request $request) {
        $user = User::all()->where('id', $request->user_id)->firstOrFail();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;

        if ($user->saveOrFail()) $this->createDocument($request->user_id, $request->type_document_id, $request->created_date);

        return response()->json(true);
    }

    /**
     * @param $user
     * @param $type_document
     * @param $created_date
     * @return bool|void
     * @throws \Throwable
     */
    public function createDocument($user, $type_document, $created_date) {
        $document = new DocumentUser();
        $document->user_id = $user;
        $document->type_document_id = $type_document;
        $document->created_order = $created_date;
        if ($document->saveOrFail()) return true;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request) {
        $documents = DocumentUser::with('getFullInformation')->where('user_id', $request->user_id)->get();

        return response()->json($documents);
    }
}
