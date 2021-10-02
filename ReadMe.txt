This was an old Web dev project that we made a while back,
I looked at it and thought it would be the perfect candidate for this assignment.
I removed a lot of the parts that made it secure and also found parts that we could have improved on
when we first made it.

This is a php based signup form from our old project

Please import the database with the same name "mochidbv2"

So the sins the website commits is

Sin 4, it queries and stored everything into the local storage, it should only pull info that is relevant 
and is to be used as to avoid compromises in security. To change this, we should have created the code so 
that it only took what it needed, instead it queried everything from the database.

Sin 5, all the queries were hardcoded and not modularized. This is the problem with the webapp we made,
it wasn't modularized so a lot of problems could be formed from this such as SQL injections and the like.
Modularizing all the parts so that it is pushed to the database individually and not as a whole would lead
to a lot less problems involving data and makes it a lot more scalable. We should have thought about this
during the original creation but I guess we had other problems in mind.

Sin 3, during the creation of this web app, I don't think we made it HTTPOnly and Secure which can lead
to a whole lot of problems. If we knew the problems that could create, we would have made it HTTPOnly and secure.

Thank you for reading!
