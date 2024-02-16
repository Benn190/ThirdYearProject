import HomeFeed from "./components/home-feed";
import HomeGroup from "./components/home-group-bar";
import ProfileBar from "./components/home-profile-bar";
import "./css/home-main.css";

function HomeMain() {
    return (
        <main className="homepage">
            <ProfileBar />
            <HomeFeed />
            <HomeGroup />
        </main>
    );
}

export default HomeMain;
