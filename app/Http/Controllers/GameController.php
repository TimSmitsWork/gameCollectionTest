<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchGameRequest;
use App\Http\Requests\StoreGameRequest;
use App\Models\Game;
use App\Services\GameService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GameController extends Controller
{
    /**
     * @var GameService
     */
    protected $gameService;

    /**
     * @param GameService $gameService
     */
    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $games = $this->gameService->getAll();

        return view('index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('create');
    }

    /**
     * @param SearchGameRequest $searchGameRequest
     * @return JsonResponse
     */
    public function search(SearchGameRequest $searchGameRequest): JsonResponse
    {
        $games = $this->gameService->search($searchGameRequest->get('name'));

        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGameRequest $storeGameRequest
     * @return JsonResponse
     */
    public function store(StoreGameRequest $storeGameRequest): JsonResponse
    {
        Game::create($storeGameRequest->only(['name', 'slug']));

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @return Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Game $game
     * @return Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $game
     * @return Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @return Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
