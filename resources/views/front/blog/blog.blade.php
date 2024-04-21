@extends('front.master.landing_master')

@section('content')
<section class="bg-white py-8 antialiased md:py-16">
	<div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
		<div class="mx-auto max-w-2xl">
			<h1 class="text-xl font-semibold text-gray-900 sm:text-3xl">{{ $blog['title'] }}</h1>
			<div class="pt-4">
				<span class="inline-flex items-center rounded-md bg-red-50 px-4 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Laravel 11</span>
				<span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium">{{ date('M d, Y', strtotime($blog['created_at'])) }}</span>·
				<span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium">1 min read</span>
			</div>
			<div class="my-8 xl:mb-16 xl:mt-12">
				<!-- <img class="w-full" src="{{ url('media/blog').'/'.$blog['image'] }}" alt="" /> -->
			</div>
			<div class="mx-auto max-w-2xl space-y-6">
				<p class="text-base font-normal text-gray-500">The iMac "M1" 8-Core CPU/8-Core GPU/4 USB-C Shaped Ports (2021) model features a 5-nm Apple M1 processor with 8 cores (4 performance cores and 4 efficiency cores), an 8-core GPU, a 16-core Neural Engine, 8 GB of onboard RAM, and a 1 TB onboard SSD.</p>

				<p class="text-base font-normal text-gray-500">
					This all is housed in a wafer thin aluminum case with flat edges that includes a 23.5" 4480x2520, 218 PPI, LED-backlit, "True Tone" widescreen "Retina 4.5K" display mounted on a svelte aluminum stand. This specific model is offered in the a two-tone Blue color. It also has an integrated 1080p FaceTime HD camera, a "studio-quality three-mic array" and a "high-fidelity six-speaker system" that supports Spatial Audio with Dolby Atmos.
				</p>

				<p class="text-base font-semibold text-gray-900">Key Features and Benefits:</p>
				<ul class="list-outside list-disc space-y-4 pl-4 text-base font-normal text-gray-500">
					<li>
						<span class="font-semibold text-gray-900"> Brilliant 4.5K Retina display: </span>
						see the big picture and all the detailsSee it all in sharp, glorious detail on the immersive 24-inch 4.5K Retina display. The P3 wide color gamut brings what you're watching to life in over a billion colors. Images shine with a brilliant 500 nits of brightness. Industry-leading anti-reflective coating delivers greater comfort and readability. And True Tone technology automatically adjusts the color temperature of your display to the ambient light of your
						environment, for a more natural viewing experience. So whether you're editing photos, working on presentations, or watching your favorite shows and movies, everything looks incredible on iMac.
					</li>
					<li>
						<span class="font-semibold text-gray-900"> 1080p FaceTime HD camera: </span>
						ready for your close-upIt's the best camera system ever in a Mac. Double the resolution for higher-quality video calls. A larger sensor that captures more light. And the advanced image signal processor (ISP) of M1 greatly improves image quality. So from collaborating with coworkers to catching up with friends and family, you'll always look your best.
					</li>

					<li>
						<span class="font-semibold text-gray-900"> Studio-quality mics for high-quality conversations: </span>
						whether you're on a video call with a friend, cutting a track, or recording a podcast, the microphones on iMac make sure you come through loud, crisp, and clear. The studio-quality three-mic array is designed to reduce feedback, so conversations flow more naturally and you interrupt each other less. And beamforming technology helps the mics ignore background noise. Which means everyone hears you - not what's going on around you.
					</li>

					<li>
						<span class="font-semibold text-gray-900"> Six-speaker sound system: audio that really fills a room: </span>
						the sound system on iMac brings incredible, room-filling audio to any space. Two pairs of force-canceling woofers create rich, deep bass without unwanted vibrations. And each pair is balanced with a high-performance tweeter. The result is a massive, detailed soundstage that takes your movies, music, and more to the next level.
					</li>

					<li>
						<span class="font-semibold text-gray-900"> M1 chip: with great power comes great capability: </span>
						M1 is the most powerful chip Apple has ever made. macOS Big Sur is an advanced desktop operating system. Combined, they take iMac to entirely new levels of performance, efficiency, and security. iMac wakes from sleep almost instantly, apps launch in a flash, and the whole system feels fluid, smooth, and snappy. With up to 85 percent faster CPU performance and up to two times faster graphics performance than standard 21.5-inch iMac models, you can use apps like
						Xcode and Affinity Photo to compile code in a fraction of the time or edit photos in real time. And it runs cool and quiet even while tackling these intense workloads. That's the power of hardware, software, and silicon - all designed together.
					</li>
				</ul>
			</div>

			<div class="mx-auto mb-6 max-w-3xl space-y-6 md:mb-12">
				<p class="text-base font-normal text-gray-500">Connectivity includes two Thunderbolt / USB 4 ports and two USB 3 ports (all with a USB-C connector), a 3.5 mm headphone jack conveniently mounted on the left edge of the display, Wi-Fi 6 (802.11ax), and Bluetooth 5.0.</p>

				<p class="text-base font-normal text-gray-500">A-Grade/CR: iMacs are in 9/10 Cosmetic Condition and are 100% Fully Functional. iMacs will be shipped in generic packaging and will contain generic accessories. 90 Days Seller Warranty Included. iMacs may show signs of wear like scratches, scuffs and minor dents.</p>
			</div>
		</div>
	</div>
</section>

<!-- Comment Start -->
<section class="bg-white py-8 lg:py-16 antialiased">
	<div class="max-w-2xl mx-auto px-4">
		<div class="flex justify-between items-center mb-6">
			<h2 class="text-lg lg:text-2xl font-bold text-gray-900">Comments (20)</h2>
		</div>
		<form class="mb-6">
			<div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
				<label for="comment" class="sr-only">Your comment</label>
				<textarea id="comment" rows="6" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none" placeholder="Write a comment..." required></textarea>
			</div>
			<button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
				Post comment
			</button>
		</form>
		<article class="p-6 text-base bg-white rounded-lg">
			<footer class="flex justify-between items-center mb-2">
				<div class="flex items-center">
					<p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold"><img class="mr-2 w-6 h-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Michael Gough">Michael Gough</p>
					<p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
				</div>
				<button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50" type="button">
					<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
						<path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
					</svg>
					<span class="sr-only">Comment settings</span>
				</button>
				<!-- Dropdown menu -->
				<div id="dropdownComment1" class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow">
					<ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Edit</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Remove</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Report</a>
						</li>
					</ul>
				</div>
			</footer>
			<p class="text-gray-500">Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
				instruments for the UX designers. The knowledge of the design tools are as important as the
				creation of the design strategy.</p>
			<div class="flex items-center mt-4 space-x-4">
				<button type="button" class="flex items-center text-sm text-gray-500 hover:underline">
					<svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
					</svg>
					Reply
				</button>
			</div>
		</article>
		<article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg">
			<footer class="flex justify-between items-center mb-2">
				<div class="flex items-center">
					<p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold"><img class="mr-2 w-6 h-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese Leos">Jese Leos</p>
					<p class="text-sm text-gray-600"><time pubdate datetime="2022-02-12" title="February 12th, 2022">Feb. 12, 2022</time></p>
				</div>
				<button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50" type="button">
					<svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
						<path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
					</svg>
					<span class="sr-only">Comment settings</span>
				</button>
				<!-- Dropdown menu -->
				<div id="dropdownComment2" class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow">
					<ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMenuIconHorizontalButton">
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Edit</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Remove</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-4 hover:bg-gray-100">Report</a>
						</li>
					</ul>
				</div>
			</footer>
			<p class="text-gray-500">Much appreciated! Glad you liked it ☺️</p>
			<div class="flex items-center mt-4 space-x-4">
				<button type="button" class="flex items-center text-sm text-gray-500 hover:underline font-medium">
					<svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
					</svg>
					Reply
				</button>
			</div>
		</article>
	</div>
</section>
<!-- Comment End -->
@endsection