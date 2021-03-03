# Game collection
Using Laravel 8 & Sail: [documentation](https://laravel.com/docs/8.x/installation)

- Install Docker
- run sail up
- run composer/npm when needed
- fetch your [rawg.io api key](https://rawg.io/apidocs) and add it to the .env
- run migration

## my structure
We all know Laravel but we all have our own approach.  
I like to work with the Factory and Service design pattern. So just wanted to show a bit this architecture.

For me working with Factory and Services makes the code clean, readable and also easy to test your functions when needed.

For this test I only focused to the core you asked "add a game by showing some data".  
You will see your collection on the homepage, and be able to add a new game. This will use Vue to search through the rawg api. If any game is found you'll see the details of the game and be able to add this to your collection.
