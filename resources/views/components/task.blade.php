<div class="task {{ $data['is_done'] ? 'done' : 'pending'}}">
    <div class="title">
        <input type="checkbox" onchange="checkedTask(this)" data-id="{{ $data['id'] }}"
            @if ($data && $data['is_done'])
                checked
            @endif
        >
        <div class="task-title">
            {{ $data['title'] ?? '' }}
        </div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category']->title ?? '' }}</div>
    </div>
    <div class="actions">
        <a href="{{ route('tasks.edit', ['id' => $data['id']]) }}">
            <img src="/assets/images/icon-edit.png">
        </a>
        <a href="{{ route('tasks.delete', ['id' => $data['id']]) }}">
            <img src="/assets/images/icon-delete.png">
        </a>
    </div>
</div>