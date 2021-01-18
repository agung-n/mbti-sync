<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg ">

<div class="flex" >
	<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

	<button wire:click="showModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">

		Create Post
	</button>
	
 <div class="font-bold">This is the Teacher List</div>
		@if($isOpen)
			@include('livewire.create')
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
			<th class="px-4 py-2 text-white w-50">Title</th>
			<th class="px-4 py-2 text-white w-50">Description</th>
			<th class="px-4 py-2 text-white w-30">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->description}}</td>
			<td>
				<button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
				<button wire:click="delete({{ $post->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>

{{$posts->links()}}