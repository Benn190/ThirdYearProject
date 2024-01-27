/*
A list of useful sql functions for the website
This list is not to be implemented directly but modified slightly
to fit the php content
data that should be changed dynamically (such as changing names)
is signified with an @
*/

/*List of friends*/
SELECT username FROM follows
WHERE followee = '@username';

/*List of followers*/
SELECT followee FROM follows
WHERE username = '@username';

/*Members of a Group*/
SELECT * FROM accountsToGroup
WHERE groupID = @groupID;


/*Number of likes as a value constraint -  this will be a view instead*/

CREATE VIEW [postLikesValues] AS
SELECT postID, COUNT(usernames) AS likes
FROM usersToLikes
GROUP BY postID;

/*Get posts and the number of likes*/

SELECT * FROM post, postLikesValues
INNER JOIN postLikesValues ON post.postID = postLikesValues.postID;

/*Search queries - injection is to be prevented after halfway*/

SELECT * FROM users
WHERE username LIKE '%@searchTerm%' OR name LIKE '%@searchTerm%;

SELECT * FROM post
INNER JOIN postLikesValues ON post.postID = postLikesValues.postID;
WHERE text LIKE '%@searchTerm%';

SELECT * FROM groups
WHERE groupName LIKE '%@searchTerm%';

