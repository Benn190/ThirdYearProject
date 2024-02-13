function ProfileBar() {
    return (
        <profile className="tile ">
            <div>
                <div>
                    <div id="Banner"></div>
                    <a href="Profile.php">
                        <img
                            className="pfp"
                            src="../images/icons/Unknown_person.jpg"
                            alt="pfp"
                            width="100"
                            height="100"
                        />
                    </a>
                    <div id="pfp-outline"></div>
                </div>

                <div>
                    <div>
                        <h3>$name</h3>
                        <h4 id="occupation">@$username</h4>
                    </div>
                    <div className="divider"></div>
                </div>
            </div>

            <div>
                <a href="../html/Group.php"> Collabs</a>
                <a href="../html/Messages.php"> Messages</a>
                <a href="../html/notifs.php"> Notifications</a>
            </div>
        </profile>
    );
}

export default ProfileBar;
