<?php 

class PostTableSeeder extends Seeder 
{

	public function run()
	{	
		DB::table('posts')->delete();

		$post = new Post();
		$post->title = 'Change is good right?';
		$post->content = "Writing a blog is not easy.  I haven't done a whole lot of personal writing since I was in college trying to write essays for Freshman Composition.  2016 has been the year of change for me and I'm just trying to chronicle it.
			I started thinking about a career change in October of 2015, but didn't seriously consider it for a number of reasons.  My reasons were that I liked my job and life was pretty good.  Then a couple of months later I realized I was bored at work and I didn't have a forseeable future at my current company.  This was not good.  In the past I tried teaching myself Java by taking courses with Austin Community College and Python on Codeacademy but got frustrated learning on my own and gave it up.  To learn a promgramming language on your own is tough and I was thinking the only way I could REALLY learn was by getting in a classroom.
			
			
			By chance I saw an article about Hackbright Academy in San Francisco which was a program exclusively for women in San Francisco.  I couldn't stop thinking about it.  How cool would that be to go to a program like that and totally change my life? But then reality set-in when I realized I would become destitute after spending 3 months in San Francisco.  Luckily, with just one Google search later I found Codeup right here in San Antonio.  
				
			
			I asked my family about it and they were surprisingly supportive.  That's all I needed to move forward.  I went through the application process and got accepted.  The last step was to tell my boss.  My boss and I had become friends.  He's a great guy and he treats people like individuals - not just assets of the company.  So when I told him my decision, he encouraged me to go for it.   I think because he knew I was unfulfilled and capable of so much more than I was doing. Getting his stamp of approval was all I needed to move forward.


			";
		$post->categories = 'First Post';
		$post->img_path = '/uploads/wand.jpg';
		$post->user_id = User::first()->id; 
		$post->created_at = '2016-06-01';
		$post->save();

		$post = new Post();
		$post->title = 'Learning Laravel';
		$post->content = "Since I've decided that I want to pursue a career in mostly back-end work, I have to say that I'm digging Laravel.  I like that it gives me a template to work in.  I like this whole framework existence.  After our last group project, in which we made our own framework, having Laravel as a tool is nice. I watched the Laracast for 4.2 over the weekend which just helped reiterate the concepts we learned in class but also makes me want to take a look at version 5 and beyond.";
		$post->categories = 'Laravel';
		$post->img_path = '/uploads/laravel.png';
		$post->user_id = User::first()->id;
		$post->save();
	}

}