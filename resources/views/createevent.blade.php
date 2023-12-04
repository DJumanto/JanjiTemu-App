<!-- createevent.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h1 class="display-6">Create Event</h1>
    </x-slot>

    <div class="container mt-5">
        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="e_name" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="e_name" name="e_name" required>
            </div>

            <div class="mb-3">
                <label for="e_description" class="form-label">Event Description</label>
                <textarea class="form-control" id="e_description" name="e_description" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="e_place" class="form-label">Event Place</label>
                <input type="text" class="form-control" id="e_place" name="e_place" required>
            </div>

            <div class="mb-3">
                <label for="e_image" class="form-label">Event Image</label>
                <input type="file" class="form-control" id="e_image" name="e_image" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="e_date" class="form-label">Event Date</label>
                <input type="date" class="form-control" id="e_date" name="e_date" required>
            </div>

            <div class="mb-3">
                <label for="group_id" class="form-label">Group ID</label>
                <input type="text" class="form-control" id="group_id" name="group_id" value="b11d4531-9c45-4ed4-85a8-7643e06ab1a7" hidden=true required>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
</x-app-layout>
