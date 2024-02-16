import React, { useEffect, useState } from "react";
import "./login.css";

function LoginMain() {
    // State variables to manage visibility and zIndex
    const [loginVisibility, setLoginVisibility] = useState("visible");
    const [registerVisibility, setRegisterVisibility] = useState("hidden");
    const [registerZIndex, setRegisterZIndex] = useState("2");

    useEffect(() => {
        // Event listener for changing to login screen
        const toLoginChangeScreen = document.querySelector(
            ".to-login-change-screen"
        );
        toLoginChangeScreen.addEventListener("click", () => {
            setRegisterZIndex("0");
            setRegisterVisibility("hidden");
            setLoginVisibility("visible");
        });

        // Event listener for changing to signup screen
        const toSignupChangeScreen = document.querySelector(
            ".to-signup-change-screen"
        );
        toSignupChangeScreen.addEventListener("click", () => {
            setRegisterZIndex("2");
            setRegisterVisibility("visible");
            setLoginVisibility("hidden");
        });

        // Clean up event listeners on component unmount
        return () => {
            toLoginChangeScreen.removeEventListener("click", () => {});
            toSignupChangeScreen.removeEventListener("click", () => {});
        };
    }, []); // Empty dependency array to run the effect only once
    return (
        <>
            <section id="loginSection" style={{ visibility: loginVisibility }}>
                <div>
                    <h1>ShareSync</h1>
                    <h1>Login</h1>
                </div>

                <form action="../php/login.php" method="post" id="loginForm">
                    <div>
                        <div className="login-inputs">
                            <div>
                                <img
                                    src="../images/icons/login/user-svgrepo-com.svg"
                                    alt=""></img>
                                <input
                                    type="text"
                                    name="username"
                                    placeholder="Username"
                                    required=""></input>
                            </div>
                            <div>
                                <img
                                    src="../images/icons/login/lock-keyhole-minimalistic-svgrepo-com.svg"
                                    alt=""></img>
                                <input
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required=""></input>
                            </div>
                        </div>
                        <div>
                            <a href="update_password.php">Forgot password?</a>
                            <div className="option2">
                                <p>New to this website? </p>
                                <a className="to-signup-change-screen">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="login" value="Login"></input>
                    </div>
                </form>
            </section>

            <section
                id="registerSection"
                style={{
                    visibility: registerVisibility,
                    zIndex: registerZIndex,
                }}>
                <div>
                    <h1>ShareSync</h1>
                    <h1>Register</h1>
                </div>
                <form
                    action="../php/register.php"
                    method="post"
                    id="registrationForm">
                    <div>
                        <label htmlFor="name">Full name:</label>
                        <input id="name" name="name" type="text" />
                        <label htmlFor="username">Username:</label>
                        <input
                            id="username"
                            name="username"
                            required=""
                            type="text"
                            onInput="checkUsernameAvailability(this.value)"
                        />
                        <span id="usernameAvailability"></span>
                        <label htmlFor="email">Email:</label>
                        <input
                            id="email"
                            name="email"
                            required=""
                            type="email"
                        />
                        <label htmlFor="password">Password:</label>
                        <input
                            id="password"
                            name="password"
                            required=""
                            type="password"
                        />
                        <div className="option2">
                            <p>Already a Member?</p>
                            <a className="to-login-change-screen">Login</a>
                        </div>
                    </div>
                    <div>
                        <input
                            id="registerSubmit"
                            type="submit"
                            value="Register"
                        />
                    </div>
                </form>
            </section>
        </>
    );
}

export default LoginMain;
