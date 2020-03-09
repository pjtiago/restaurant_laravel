<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\BooleanStatus;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use App\Services\Tag\Create as CreateTagService;
use App\Services\Tag\Update as UpdateTagService;
use Illuminate\Support\Facades\App;

class TagsController extends Controller
{
    public function index()
    {
        return view('tags.index', ['tags' => Tag::with('status')->paginate(15)]);
    }

    public function create()
    {
        return view('tags.create', [
            'tags' => Tag::all(),
            'boolean_status' => BooleanStatus::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->getCreateTagService()->save($request->all());

        return redirect()->route('tag.index')->withStatus(__('lang.tag_create_message'));
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', [
            'tag' => $tag,
            'boolean_status' => BooleanStatus::orderBy('id', 'desc')->get(),
        ]);
    }

    public function update(UpdateRequest $request, Tag $tag): RedirectResponse
    {
        $this->getUpdateTagService()->save($tag, $request->all());

        return redirect()->route('tag.index')->withStatus(__('lang.tag_updated_message'));
    }

    public function destroy(Tag $model): RedirectResponse
    {
        try {
            $model->delete();
        } catch (\Exception $e) {
            return redirect()->route('tag.index')->withErrors(__('lang.tag_fail_to_delete_message'));
        }

        return redirect()->route('tag.index')->withStatus(__('lang.tag_delete_message'));
    }

    private function getCreateTagService(): CreateTagService
    {
        return App::make('CreateTagService');
    }

    private function getUpdateTagService(): UpdateTagService
    {
        return App::make('UpdateTagService');
    }
}
