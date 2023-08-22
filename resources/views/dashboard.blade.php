<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-2xl font-medium text-gray-900">
                    Welcome to your <span style="color: cornflowerblue">Sales Activity Application!</span>
                </h1>
                <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input style="background-color: cornflowerblue; color:white;margin-right: 10%" type="file" name="file" class="form-control" accept=".xlsx, .csv"/>
                    <x-button style="background-color: cornflowerblue; color:white">Import User Data</x-button>
                </form>
                <form action="{{ route('contacts.export') }}" method="GET">
                    @csrf
                    <x-button type="submit" style="background-color: cornflowerblue; color:white;margin-left:85%">Export User Data</x-button>
                </form>
                
            
                <table style="width:100%; border-collapse: collapse; border: 1px solid black;">
                    <tr>
                        <th colspan="4" style="text-align: center; border: 1px solid black;">
                            List of Users
                        </th>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black;"><a href="{{ route('dashboard', ['sort' => 'id']) }}">ID</th>
                        <th style="border: 1px solid black;"><a href="{{ route('dashboard', ['sort' => 'name']) }}">Name</th>
                        <th style="border: 1px solid black;"><a href="{{ route('dashboard', ['sort' => 'email']) }}">Email</th>
                        <th style="border: 1px solid black;">Actions</th> 
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <td style="border: 1px solid black;">{{ $contact->id }}</td>
                        <td style="border: 1px solid black;">{{ $contact->name }}</td>
                        <td style="border: 1px solid black;">{{ $contact->email }}</td>
                        <td style="border: 1px solid black;">
                            <a href="{{ route('contacts.edit', $contact->id) }}" style="color:rebeccapurple">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
