import { Route, Routes } from "react-router-dom"
import Home from "../Layout/Home/Home"
import Login from "../Layout/Login/Login"
import Register from "../Layout/Register/Register"
import ForgotPassword from "../Layout/ForgotPassword/ForgotPassword"

const AppContainer: React.FC = () => {
    return (
        <>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/login" element={<Login />}/>
                <Route path="/register" element={<Register />}/>
                <Route path="/forgot-password" element={<ForgotPassword />} />
            </Routes>
        </>
    )
}

export default AppContainer