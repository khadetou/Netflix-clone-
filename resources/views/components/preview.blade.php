@props(['entity'])
<div class='previewContainer'>

    <img src="{{ asset($entity->thumbnail) }}" class='previewImage' hidden>

    <video autoplay muted class='previewVideo' onended='previewEnded()'>
        <source src="{{ asset($entity->preview) }}" type='video/mp4'>
    </video>

    <div class='previewOverlay'>

        <div class='mainDetails'>
            <h3>{{ $entity->name }}</h3>

            <div class='buttons'>
                <button><i class='fas fa-play'></i> Play</button>
                <button onclick='volumeToggle(this)'><i class='fas fa-volume-mute'></i></button>
            </div>

        </div>

    </div>

</div>
