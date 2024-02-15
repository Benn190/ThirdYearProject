import ProfileBanner from "./components/profile-banner";
import ProfileDisplayPost from "./components/profile-display-post";
import "./css/profile.css";

function ProfileMain() {
    return (
        <>
            <main>
                <ProfileBanner />
                <ProfileDisplayPost />
            </main>
        </>
    );
}
export default ProfileMain;
