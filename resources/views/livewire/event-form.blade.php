<div>
    <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col max-w-6xl p-6 m-4 mx-auto bg-white border border-gray-300 border-dashed rounded">
        @csrf
        <input name="datetime" class="mb-4 form-input focus:outline-none focus:border focus:border-blue-500" type="text" placeholder="Date & Time">
        <input name="title" class="mb-4 form-input" type="text" placeholder="Event Title">
        <textarea class="form-input" name="description" id="event-description" rows="10" placeholder="Your event description here..."></textarea>
        <button class="inline-block px-6 py-3 mt-4 text-lg font-bold text-white bg-black rounded" type="submit">Add Event</button>
    </form>
</div>
