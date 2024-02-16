import ProfileBanner from "./components/profile-banner";
import ProfileDisplayPost from "./components/profile-display-post";
import "./css/profile.css";

function ProfileMain() {
    return (
        <>
            <body>
                <main className="profilepage">
                    <ProfileBanner />
                    <ProfileDisplayPost />
                </main>
            </body>
        </>
    );
}
export default ProfileMain;
