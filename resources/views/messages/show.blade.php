<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard') }}">
                <svg class="h-7 w-7 pr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>

            <a href="{{ route('dashboard') }}">
                <h2 class="font-semibold text-xl text-blue-500 leading-tight">
                    {{ __('Dashboard') }}
            </a>
            </h2>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Message
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Newsletter
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $message->name }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $message->email }}
                                                    </div>
                                </div>
                                </td>
                                <td class="px-6 py-4 whitespace-wrap">
                                    <div class="text-sm text-gray-900">{{ $message->message }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="form-checkbox mx-10 rounded" name="newsletter"
                                        value=""
                                        {{ ($message->newsletter == 1 ? 'checked' : '') }}
                                        onclick="return false;">
                                </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
