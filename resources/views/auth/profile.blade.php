<x-layout>

    <form action="{{ route('auth.logout')}}" method="POST">
    @csrf
        <button>logout</button>
    </form>

</x-layout>