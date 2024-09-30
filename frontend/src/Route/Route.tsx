import { Route, Routes } from "react-router-dom"
import Home from "../Layout/Home/Home"
import Login from "../Layout/Login/Login"
import Register from "../Layout/Register/Register"
import ForgotPassword from "../Layout/ForgotPassword/ForgotPassword"
import Contact from "../Layout/Contact/Contact"
import Portfolio from "../Layout/Portfolio/Portfolio"
import ProductResearch from "../Layout/ProductResearch/ProductResearch"

const AppContainer: React.FC = () => {
    return (
        <>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/login" element={<Login />} />
                <Route path="/register" element={<Register />} />
                <Route path="/forgot-password" element={<ForgotPassword />} />
                <Route path="/contact" element={<Contact />} />
                <Route path="/portfolio" element={<Portfolio />} />
                <Route path="/productResearch" element={<ProductResearch />} />
            </Routes>
        </>
    )
}

export default AppContainer