function ProfileBanner() {
    return (
        <section className="banner-profile">
            <div></div>
            <div className="banner-profile-info">
                <span className="profilePic">
                    <img src="../images/icons/Unknown_person.jpg"></img>
                </span>
                <div className="profilePicBorder"></div>
                <div className="banner-profile-person">
                    <span className="banner-profile-name">
                        <h3>$name</h3>
                    </span>
                    <span className="banner-profile-user">
                        <h4 id="occupation">@$username</h4>
                    </span>
                </div>
                <div className="divider"></div>
                <div className="banner-profile-options">
                    <div>
                        <button onClick="showPostsTab()">Posts</button>
                        <button onClick="showGroupsTab()">Groups</button>
                        <button onClick="showAboutTab()">About</button>
                    </div>
                    <div>
                        <button>Edit</button>
                    </div>
                </div>
            </div>
        </section>
    );
}
export default ProfileBanner;
