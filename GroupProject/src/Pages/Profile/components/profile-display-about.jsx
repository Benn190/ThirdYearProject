function ProfileDisplayAbout() {
    return (
        <section className="profile-info-about">
            <div className="aboutContainer">
                <div id="leftMainHeading">
                    <h1>About</h1>
                    <h2 onClick="overview()">Overview</h2>
                    <h2 onClick="contact()">Contact Info</h2>
                    <h2 onClick="profileInfo()">Profile Info</h2>
                </div>
                <div id="rightInfo">
                    <div id="overview">
                        <p>University: </p>
                        <p>Works at:</p>
                        <p>From:</p>
                        <p>Gender:</p>
                        <p>Birthday:</p>
                    </div>

                    <div id="contact">
                        <p>Phone Number:</p>
                        <p>Email: </p>
                        <p></p>
                    </div>

                    <div id="profileInfo">
                        <p>bio</p>
                    </div>
                </div>
            </div>

            <section id="friends">
                <div>
                    <h1>Friends</h1>

                    <div className="profile">
                        <img
                            src="../images/icons/Unknown_person.jpg"
                            alt="friend profile pic">
                            {" "}
                        </img>
                        <p id="friendName">name</p>
                        <p id="username">username</p>
                    </div>
                </div>
            </section>
        </section>
    );
}
export default ProfileDisplayAbout;
