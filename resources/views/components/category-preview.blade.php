@props(['category'])
<div class="previewCategories">

    <div class='category'>
        <a href='/category?id={{ $category->id }}'>
            <h3>{{ $category->name }} </h3>
        </a>
        @php
            $entities = App\Models\Entities::where('entities.categoryId', $category->id)
                ->limit(30)
                ->get();
        @endphp
        <div class='entities'>
            @foreach ($entities as $entity)
                <a href='/entity?id={{ $entity->id }}'>
                    <div class='previewContainer small'>
                        <img src='{{ $entity->thumbnail }}' title='{{ $entity->name }}'>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</div>
