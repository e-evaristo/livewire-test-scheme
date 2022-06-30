<div>
    <div class="p-4">
        <button
            wire:click="generate()" 
            wire:loading.attr="disabled" 
            wire:loading.class="bg-gray-500 cursor-not-allowed" 
            class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">
            <span wire:loading>Loading...</span>
            <span wire:loading.remove>Generate Random Text</span>
        </button>
    </div>
    <div class="p-6  bg-white border-t border-gray-200">
        
        <span
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
        >
            {{ $message }}
        </span>
        
    </div>
</div>
