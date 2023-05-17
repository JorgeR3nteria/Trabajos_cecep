import { lazy } from "react";
import { Route, Routes } from "react-router-dom";
import { AuthRouter } from "./AuthRouter";

const Login = lazy(() => import("../pages/Login"));

export const AppRouter = () => {
  return (
    <>
      <Routes>
        <Route index element={<Login />} />
        <Route path="*" element={<AuthRouter />} />
      </Routes>
    </>
  );
};
