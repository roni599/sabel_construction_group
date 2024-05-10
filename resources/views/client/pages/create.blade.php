<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Create Project</h2>
        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <select class="form-select" id="dist" name="dist" required>
                <label for="location">Divition</label>
                <option selected>Open this select menu</option>
                <option value="barisal">Barisal</option>
                <option value="chittagong">Chittagong</option>
                <option value="dhaka">Dhaka</option>
                <option value="khulna">Khulna</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rangpur">Rangpur</option>
                <option value="sylhet">Sylhet</option>
            </select>

            <div class="form-group">
                <label for="employee">Employee</label>
                <input type="text" class="form-control" id="employee" name="employee" required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="form-group">
                <label for="doc">Document Date</label>
                <input type="date" class="form-control" id="doc" name="doc" required>
            </div>

            <div class="form-group">
                <label for="value">Value</label>
                <input type="number" class="form-control" id="value" name="value" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>

            <div class="form-group">
                <label for="images">Upload Images</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple required accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
