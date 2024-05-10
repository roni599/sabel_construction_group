<!-- resources/views/projects.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>All Projects</h2>
        @foreach($projects as $project)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->project->project_name }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $project->project->description }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $project->project->location }}</p>
                    <p class="card-text"><strong>Employee:</strong> {{ $project->project->employee }}</p>
                    <p class="card-text"><strong>Type:</strong> {{ $project->project->type }}</p>
                    <p class="card-text"><strong>Document Date:</strong> {{ \Carbon\Carbon::parse($project->project->doc)->format('d M Y') }}</p>
                    
                    <p class="card-text"><strong>Value:</strong> ${{ number_format($project->project->value, 2) }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $project->project->status }}</p>
                    <h6 class="card-subtitle mb-2 text-muted">Images:</h6>
                    <div class="row">
                        {{-- @foreach($project->images as $image)
                            <div class="col-md-3 mb-3">
                                <img src="{{ asset('storage/images/' . $image->image_name) }}" class="img-fluid" alt="{{ $image->image_name }}">
                            </div>
                        @endforeach --}}
                        @foreach (explode('|', $project->image_name) as $image)
                        <img src="{{ asset('images/uploads/' . $image) }}"  class="img-fluid" alt="{{ $image }}" width="50" height="50"
                        style="max-width: 100px;">
                    @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
