import CreatePostButton from "./create-post-button";
import CreatePostScreen from "./create-post-screen";
import Posts from "./posts";

function HomeFeed() {
    return (
        <feed className="feed">
            <CreatePostButton />

            <CreatePostScreen />
            <Posts />
        </feed>
    );
}

export default HomeFeed;
