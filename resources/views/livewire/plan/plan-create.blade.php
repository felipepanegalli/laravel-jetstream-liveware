<div class="max-w-7xl mx-auto py-15 px-4">
    <x-slot name="header">
        Novo Plano
    </x-slot>

    @include('elements.message')

    <form action="" wire:submit.prevent="createPlan" class="w-full max-w-7xl mx-auto mt-5">
        <div class="flex flex-wrap -mx-3 mb-6">

            <p class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nome Plano</label>
                <input type="text" name="description" wire:model="plan.name"
                       class="block appearance-none w-full bg-gray-200 border @error('plan.name') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            @error('plan.name')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror
            </p>

            <p class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descrição Plano</label>
                <input type="text" name="description" wire:model="plan.description"
                       class="block appearance-none w-full bg-gray-200 border @error('plan.description') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            @error('plan.description')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror
            </p>


            <p class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor do Plano</label>
                <input type="text" name="amount" wire:model="plan.price"
                       class="block appearance-none w-full bg-gray-200 border @error('plan.price') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">


            @error('plan.price')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror

            </p>

            <p class="w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apelido Plano</label>

                <input type="text" name="slug" wire:model="plan.slug"
                       class="block appearance-none w-full bg-gray-200 @error('plan.slug') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </p>
            @error('plan.slug')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror

            </p>

        </div>
        <div class="w-full py-4 mb-6">
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Criar Plano
            </button>
        </div>
    </form>
</div>
