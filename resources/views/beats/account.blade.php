<x-layout>
    <h2>Your Account</h2>
    <ul>
        @if ($premium)
            <p>You have premium account!</p>
        @else
            <p>You don't have premium account</p>
        @endif
    </ul>
</x-layout>