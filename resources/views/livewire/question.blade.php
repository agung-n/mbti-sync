<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg ">
 
 
<div class="flex" >
	<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
	<button wire:click="showAddQModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
		Create Questions
	</button>
		@if($addQuestion)
			@include('livewire.addquest')
		@endif	
	<button wire:click="showAddQModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
		Create Questions
	</button>
		@if($addQuestion)
			@include('livewire.addquest')
		@endif	
	</div>
	<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
	<input wire:model="search" type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="Search baso">	
	</div>
</div>


	@if(session()->has('info'))
		<div class="bg-green-500 border-2 border-green-700 rounded-b mb-2 py-3 px-3">
			<div>
				<h1 class="text-white font-bold">{{session('info')}}</h1>	
			</div>
		</div>
	@endif

	@if(session()->has('delete'))
		<div class="bg-red-500 border-2 border-red-700 rounded-b mb-2 py-3 px-3">
			<div>
				<h1 class="text-white font-bold">{{session('delete')}}</h1>	
			</div>
		</div>
	@endif

<table class="table-fixed w-full">
	<thead class="bg-gray-500 text-white">
		<tr>
			<th class="px-4 py-2 text-white w-20">No</th>
			<th class="px-4 py-2 text-white w-50">Question</th>
			<th class="px-4 py-2 text-white w-50">Answer A</th>
			<th class="px-4 py-2 text-white w-50">Answer B</th>
			<th class="px-4 py-2 text-white w-50">Persona</th>
			<th class="px-4 py-2 text-white w-30">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($quest as $question)
		<tr>
			<td>{{$question->id}}</td>
			<td>{{$question->text}}</td>
			<td></td>
			<td></td>
			<td>
				<button wire:click="edit({{ $question->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
				<button wire:click="delete({{ $question->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
{{$quest->links()}}