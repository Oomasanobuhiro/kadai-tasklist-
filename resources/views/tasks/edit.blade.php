@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2 class="text-lg">id: {{ $task->id }} のタスク編集ページ</h2>
    </div>

    <div class="flex justify-center">
        <form  action="{{ route('tasks.update', $task->id) }}" method="post" class="w-1/2">
            @csrf
            @method('patch')

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">タスク:</span>
                    </label>
                    <input type="text" name="content" value="{{ $task->content }}" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">ステータス:</span>
                    </label>
                    <input type="text" name="status" value="{{ $task->status }}" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">更新</button>
        </form>
    </div>

@endsection