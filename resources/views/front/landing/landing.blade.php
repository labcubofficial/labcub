@extends('front.master.landing_master')
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	{{-- Banner Start --}}
	<section class="banner">
		<div class="banner-left">
			<h1>Where Code Comes to Life: Ignite Your Passion for Programming</h1>
			<span class="banner-header">Navigate through our comprehensive archives to uncover gems of wisdom, stay up-to-date with the latest industry trends, and experiment with cutting-edge technologies. We empower you to innovate, experiment, and create.</span>
		</div>
		<div class="banner-right">
			<img class="hero-image" src="{{ url('images/landing/hero.svg') }}">
		</div>
	</section>
	{{-- Banner End --}}

	{{-- Overview Start --}}
	{{-- <section class="overview">
		<h1>Ready to get started?</h1>
		<p>Explore Labcub, or create an account instantly and start accepting payments. You can also contact us to design a custom package for your business.</p>
		<div>
			<button class="btn">Start Now</button>
			<button class="btn">Contact Sale</button>
		</div>
	</section> --}}
	{{-- Overview End --}}

	{{-- Category Start --}}
	<section class="category">
		<h1 class="lc-header">Category</h1>
		<div class="category-grid">
			@foreach($parent_categories as $parent_category)
				<div class="category-item">
					<img class="category-image" src="{{ url('media/category/'.$parent_category->image) }}">
					<span>{{ $parent_category->category_name }}</span>
				</div>
			@endforeach
		</div>
		
	</section>
	{{-- Category End --}}

	{{-- Blog Start --}}
	<section class="blogs">
		<h1 class="lc-header">Recent Posts</h1>

		<div class="blog-cards">
			@foreach($blogs as $blog)
			<a href="{{ url('blog/'.$blog['category_name'].'/'.$blog['subcategory_name'].'/'.$blog['slug']) }}" class="lc-blog-link">
				<div class="lc-blog-card">
					<div class="lc-blog-contain">
						<div class="lc-blog-image">
							<img src="{{ url('media/blog/'.$blog['image']) }}" class="lc-blog-img" alt="blog title">
						</div>
						<div class="lc-blog-content">
							<h2 class="lc-blog-title">{{ $blog['title'] }}</h2>
							<span class="lc-blog-desc">{{ $blog['short_description'] }}</span>
						</div>
					</div>
					<div></div>
				</div>
			</a>
			@endforeach
		</div>

		<div class="blog-pagination">
			{{-- <button class="btn mr">< Previous</button>
			<button class="btn" style="background-color: #FF0000; color: #FFFFFF;">1</button>
			<button class="btn">2</button>
			<button class="btn">3</button>
			<button class="btn">4</button>
			<button class="btn">5</button>
			<button class="btn ml">Next ></button> --}}
			<a class="btn mr" href="{{ url('blogs') }}">View All</a>
		</div>

	</section>
	{{-- Blog Start --}}

	{{-- Subscribe Start --}}
	<section class="subscribe">
		<img src="{{ url('images/newsletter.svg') }}" class="subscribe-image" alt="news-feed"/>
		<h1>Subscribe to our newsletter</h1>
		<div class="subscribe-desc">
			<p>Be the first to get exclusive offers and the latest news on our product directry in your inbox.</p>
		</div>
		<input type="email" name="email" id="email" placeholder="Email"><br>
		<button class="btn btn-subscribe" id="btn-subscribe">Subscribe</button>
	</section>
	{{-- Subscribe Start --}}

@endsection

<script type="text/javascript">
	$(document).ready(function() {
		$('#btn-subscribe').on('click',function() {
			$.ajax({
				headers: { 
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]'). attr('content') 
				},
    			url: "{{ route('subscription.store') }}",
    			type: 'POST',
        		data: {
        			'email' : $('#email').val(),
        			'name' : $('#name').val()
        		},
        		dataType: 'json',
        		success: function(response) {
        			$('#email').val('');
            		alert('Subscribed successfully');
        		},
        		error: function(response) {
            		console.log(response);
        		}
    		});
		});

		$('#email').css('border', '2px solid #FFFFFF00');

		$('#email').on('keyup', function(){
			var email = $('#email').val();
			var regex = /@.*\.com$/;

			if(regex.test(email)){
				$('#email').css('border', '2px solid var(--success)');
				$('#btn-subscribe').css('cursor', 'pointer');
			}else{
				$('#email').css('border', '2px solid var(--error)');
				$('#btn-subscribe').css('cursor', 'not-allowed');
			}
		});
	});
</script>
