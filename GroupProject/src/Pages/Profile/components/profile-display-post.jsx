function ProfileDisplayPost() {
    return (
        <section className="profile-info-display">
            <aside className="profile-bio">
                <h3>Bio</h3>
                <bio>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet cupiditate doloremque illo enim quibusdam totam error
                    excepturi odit pariatur fugiat vero hic, velit fugit
                    tenetur.
                </bio>
                <div>
                    <span>IMG</span>
                    <span>Studies at Heriot Watt</span>
                </div>
            </aside>
            <div className="profile-post-column">
                <bside className="profile-posts">
                    <post className="posts" id="$postid">
                        <prepost>
                            <div className="post-column">
                                <div className="expanded-post">
                                    <img src="$post_image_path"></img>
                                </div>
                            </div>
                            <div className="comments-column">
                                <div className="post-info">
                                    <div className=" comment-header">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>$name</span>
                                                <span>@$username</span>
                                            </div>
                                        </div>
                                        <a
                                            href="#"
                                            className="close"
                                            onClick="exitButton(this)"></a>
                                    </div>
                                    <div className="choices">
                                        <div className="comment-post-options">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                                <span>4213</span>
                                            </button>
                                            <button>
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fillRule="evenodd"
                                                        clipRule="evenodd"
                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"
                                                        fill="#1C274C"
                                                    />
                                                </svg>
                                                <span>Comment</span>
                                            </button>
                                            <button>
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.6357 15.6701L20.3521 10.5208C21.8516 6.02242 22.6013 3.77322 21.414 2.58595C20.2268 1.39869 17.9776 2.14842 13.4792 3.64788L8.32987 5.36432C4.69923 6.57453 2.88392 7.17964 2.36806 8.06698C1.87731 8.91112 1.87731 9.95369 2.36806 10.7978C2.88392 11.6852 4.69923 12.2903 8.32987 13.5005C8.77981 13.6505 9.28601 13.5434 9.62294 13.2096L15.1286 7.75495C15.4383 7.44808 15.9382 7.45041 16.245 7.76015C16.5519 8.06989 16.5496 8.56975 16.2398 8.87662L10.8231 14.2432C10.4518 14.6111 10.3342 15.1742 10.4995 15.6701C11.7097 19.3007 12.3148 21.1161 13.2022 21.6319C14.0463 22.1227 15.0889 22.1227 15.933 21.6319C16.8204 21.1161 17.4255 19.3008 18.6357 15.6701Z"
                                                        fill="#1C274C"
                                                    />
                                                </svg>
                                                <span>Share</span>
                                            </button>
                                        </div>
                                        <button>
                                            <svg
                                                width="24px"
                                                height="24px"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.1835 7.80516L16.2188 4.83755C14.1921 2.8089 13.1788 1.79457 12.0904 2.03468C11.0021 2.2748 10.5086 3.62155 9.5217 6.31506L8.85373 8.1381C8.59063 8.85617 8.45908 9.2152 8.22239 9.49292C8.11619 9.61754 7.99536 9.72887 7.86251 9.82451C7.56644 10.0377 7.19811 10.1392 6.46145 10.3423C4.80107 10.8 3.97088 11.0289 3.65804 11.5721C3.5228 11.8069 3.45242 12.0735 3.45413 12.3446C3.45809 12.9715 4.06698 13.581 5.28476 14.8L6.69935 16.2163L2.22345 20.6964C1.92552 20.9946 1.92552 21.4782 2.22345 21.7764C2.52138 22.0746 3.00443 22.0746 3.30236 21.7764L7.77841 17.2961L9.24441 18.7635C10.4699 19.9902 11.0827 20.6036 11.7134 20.6045C11.9792 20.6049 12.2404 20.5358 12.4713 20.4041C13.0192 20.0914 13.2493 19.2551 13.7095 17.5825C13.9119 16.8472 14.013 16.4795 14.2254 16.1835C14.3184 16.054 14.4262 15.9358 14.5468 15.8314C14.8221 15.593 15.1788 15.459 15.8922 15.191L17.7362 14.4981C20.4 13.4973 21.7319 12.9969 21.9667 11.9115C22.2014 10.826 21.1954 9.81905 19.1835 7.80516Z"
                                                    fill="#1C274C"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                    <p className="caption">$text</p>
                                </div>
                                <div>
                                    <h4>Comments</h4>
                                    <div className="divider"></div>
                                </div>
                                <div className="comment-container">
                                    <div className="comment-user-comment">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>Michael Schumacher</span>
                                                <span>Comment - 22/01/23</span>
                                            </div>
                                        </div>
                                        <div className="comment-like">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div>
                                        <div className="comment-text">
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Deserunt animi obcaecati quidem
                                            nostrum commodi tenetur?
                                        </div>
                                        <div className="comment-options">
                                            <span>1 Like</span>
                                            <a>Reply</a>
                                        </div>
                                    </div>
                                    <div className="comment-user-comment">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>Michael Schumacher</span>
                                                <span>Comment - 22/01/23</span>
                                            </div>
                                        </div>
                                        <div className="comment-like">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div className="comment-text">
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Deserunt animi obcaecati quidem
                                            nostrum commodi tenetur?
                                        </div>
                                        <div className="comment-options">
                                            <span>1 Like</span>
                                            <a>Reply</a>
                                        </div>
                                    </div>
                                    <div className="comment-user-comment">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>Michael Schumacher</span>
                                                <span>Comment - 22/01/23</span>
                                            </div>
                                        </div>
                                        <div className="comment-like">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div className="comment-text">
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Deserunt animi obcaecati quidem
                                            nostrum commodi tenetur?
                                        </div>
                                        <div className="comment-options">
                                            <span>1 Like</span>
                                            <a>Reply</a>
                                        </div>
                                    </div>
                                    <div className="comment-user-comment">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>Michael Schumacher</span>
                                                <span>Comment - 22/01/23</span>
                                            </div>
                                        </div>
                                        <div className="comment-like">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div className="comment-text">
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Deserunt animi obcaecati quidem
                                            nostrum commodi tenetur?
                                        </div>
                                        <div className="comment-options">
                                            <span>1 Like</span>
                                            <a>Reply</a>
                                        </div>
                                    </div>
                                    <div className="comment-user-comment">
                                        <div className="user-container">
                                            <a href="Profile.php">
                                                <img
                                                    src="../images/icons/Unknown_person.jpg"
                                                    className="post-avatar"
                                                />
                                            </a>
                                            <div className="user-post-name">
                                                <span>Michael Schumacher</span>
                                                <span>Comment - 22/01/23</span>
                                            </div>
                                        </div>
                                        <div className="comment-like">
                                            <button
                                                className="like icons"
                                                onClick="toggleHeart(this)">
                                                <svg
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="red"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <div className="comment-text">
                                            Lorem, ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Deserunt animi obcaecati quidem
                                            nostrum commodi tenetur?
                                        </div>
                                        <div className="comment-options">
                                            <span>1 Like</span>
                                            <a>Reply</a>
                                        </div>
                                    </div>
                                    <div className="comment-replies">
                                        <div className="comment-user-comment">
                                            <div className="user-container">
                                                <a href="Profile.php">
                                                    <img
                                                        src="../images/icons/Unknown_person.jpg"
                                                        className="post-avatar"
                                                    />
                                                </a>
                                                <div className="user-post-name">
                                                    <span>
                                                        Michael Schumacher
                                                    </span>
                                                    <span>
                                                        Comment - 22/01/23
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="comment-like">
                                                <button
                                                    className="like icons"
                                                    onClick="toggleHeart(this)">
                                                    <svg
                                                        width="24px"
                                                        height="24px"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                            fill="red"
                                                        />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div className="comment-replies-container">
                                            <div className="comment-text">
                                                <p>
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit.
                                                    Phasellus imperdiet, nulla
                                                    et dictum interdum, nisi
                                                    lorem egestas vitae scel
                                                    <span id="dots">...</span>
                                                    <span id="more">
                                                        erisque enim ligula
                                                        venenatis dolor.
                                                        Maecenas nisl est,
                                                        ultrices nec congue
                                                        eget, auctor vitae
                                                        massa. Fusce luctus
                                                        vestibulum augue ut
                                                        aliquet. Nunc sagittis
                                                        dictum nisi, sed
                                                        ullamcorper ipsum
                                                        dignissim ac. In at
                                                        libero sed nunc
                                                        venenatis imperdiet sed
                                                        ornare turpis. Donec
                                                        vitae dui eget tellus
                                                        gravida venenatis.
                                                        Integer fringilla congue
                                                        eros non fermentum. Sed
                                                        dapibus pulvinar nibh
                                                        tempor porta.
                                                    </span>
                                                </p>

                                                <button
                                                    onClick="toggleMore()"
                                                    id="myBtn">
                                                    Read more
                                                </button>
                                            </div>
                                            <div className="comment-options">
                                                <span>1 Like</span>
                                                <a>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="comment-create-container">
                                    <form>
                                        <input
                                            className="comment-create"
                                            type="text"></input>
                                    </form>
                                </div>
                            </div>
                        </prepost>
                        <div className="feed-post">
                            <div className="user-container">
                                <a href="Profile.php">
                                    <img
                                        src="../images/icons/Unknown_person.jpg"
                                        className="post-avatar"
                                    />
                                </a>
                                <div className="user-post-name">
                                    <span>$name</span>
                                    <span>@$poster_username</span>
                                </div>
                            </div>
                            <button
                                className="post-image"
                                onClick="openPost(this)"
                                data-postid="$postid">
                                <img
                                    className="post-image"
                                    src="$post_image_path"
                                />
                            </button>
                            <div className="choices">
                                <div className="post-options">
                                    <button
                                        className="like icons post-$postid"
                                        onClick="toggleHeart($postid);handleLikeButtonClick($postid);">
                                        <svg
                                            width="24px"
                                            height="24px"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                fill="red"
                                            />
                                        </svg>
                                    </button>

                                    <button className="post-comment-button">
                                        <svg
                                            width="24px"
                                            height="24px"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                fill="red"
                                            />
                                        </svg>
                                    </button>
                                    <button>
                                        <svg
                                            width="24px"
                                            height="24px"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.6357 15.6701L20.3521 10.5208C21.8516 6.02242 22.6013 3.77322 21.414 2.58595C20.2268 1.39869 17.9776 2.14842 13.4792 3.64788L8.32987 5.36432C4.69923 6.57453 2.88392 7.17964 2.36806 8.06698C1.87731 8.91112 1.87731 9.95369 2.36806 10.7978C2.88392 11.6852 4.69923 12.2903 8.32987 13.5005C8.77981 13.6505 9.28601 13.5434 9.62294 13.2096L15.1286 7.75495C15.4383 7.44808 15.9382 7.45041 16.245 7.76015C16.5519 8.06989 16.5496 8.56975 16.2398 8.87662L10.8231 14.2432C10.4518 14.6111 10.3342 15.1742 10.4995 15.6701C11.7097 19.3007 12.3148 21.1161 13.2022 21.6319C14.0463 22.1227 15.0889 22.1227 15.933 21.6319C16.8204 21.1161 17.4255 19.3008 18.6357 15.6701Z"
                                                fill="#1C274C"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </post>
                </bside>
            </div>
        </section>
    );
}
export default ProfileDisplayPost;
