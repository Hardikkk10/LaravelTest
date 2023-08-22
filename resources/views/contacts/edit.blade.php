<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-2xl font-medium text-gray-900">
                    Edit Contact
                </h1>
            
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" value="{{ $contact->name }}">
                    <input type="text" name="email" value="{{ $contact->email }}">
                    <button style="border: 1px; background-color:cornflowerblue;color:white" type="submit">Update Selected Contact</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
