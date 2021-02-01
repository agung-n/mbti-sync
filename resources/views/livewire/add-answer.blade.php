<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<div class="fixed z-10 inset-0 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div>
        	<h1 class="font-bold text-center mb-4">CREATE ANSWER</h1>        	
        </div>
        <div>
        	<div class="mb-2">
        		<input wire:model="answerId" type="hidden" name="answerId" class="shadow appearance-none border rounded w-full py-2 px-3">
        	</div>
        	<div class="mb-2">
        		<label for="answertext" class="block">Answer</label>	
        		<input wire:model="answertext" type="text" name="answertext" class="shadow appearance-none border rounded w-full py-2 px-3">
        		@error('title')<h1 class="text-red-500">{{$message}}</h1>@enderror
        	</div>        	
        	<div class="mb-2">
        		<label for="valuee" class="block">Value E</label>	
        		<input wire:model="valuee" type="text" name="valuee" class="shadow appearance-none border rounded w-full py-2 px-3">
        		@error('title')<h1 class="text-red-500">{{$message}}</h1>@enderror
        	</div>        	
        	<div class="mb-2">
        		<label for="values" class="block">Value S</label>	
        		<input wire:model="values" type="text" name="values" class="shadow appearance-none border rounded w-full py-2 px-3">
        		@error('title')<h1 class="text-red-500">{{$message}}</h1>@enderror
        	</div>
        	<div class="mb-2">
        		<label for="valuet" class="block">Value T</label>	
        		<input wire:model="valuet" type="text" name="valuet" class="shadow appearance-none border rounded w-full py-2 px-3">
        		@error('title')<h1 class="text-red-500">{{$message}}</h1>@enderror
        	</div>
        	<div class="mb-2">
        		<label for="valuej" class="block">Value J</label>	
        		<input wire:model="valuej" type="text" name="valuej" class="shadow appearance-none border rounded w-full py-2 px-3">
        		@error('title')<h1 class="text-red-500">{{$message}}</h1>@enderror
        	</div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
          	Submit
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
          <button wire:click="hideAddAModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
      </div>

    </form>
    </div>
  </div>
</div>