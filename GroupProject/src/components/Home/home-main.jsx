import HomeFeed from "./home-feed";
import HomeGroup from "./home-group-bar";
import "./home-main.css";
import ProfileBar from "./home-profile-bar";

function HomeMain() {
    return (
        <main>
            <ProfileBar />
            <HomeFeed />
            <HomeGroup />
        </main>
    );
}

export default HomeMain;
