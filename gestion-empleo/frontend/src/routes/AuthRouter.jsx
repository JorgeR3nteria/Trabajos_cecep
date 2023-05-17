import { lazy } from "react";
import { Route, Routes } from "react-router-dom";
import RouterGuard from "../components/RouterGuard";

const Roles = lazy(() => import("../pages/Roles"));
const Home = lazy(() => import("../pages/Home"));
const Cities = lazy(() => import("../pages/Cities"));
const Countrys = lazy(() => import("../pages/Countrys"));
const Neighborhoods = lazy(() => import("../pages/Neighborhoods"));
const Users = lazy(() => import("../pages/Users"));
const Eps = lazy(() => import("../pages/Eps"));

export const AuthRouter = () => {
  const user = JSON.parse(localStorage.getItem("user"));

  return (
    <>
      {/*  Todos los roles */}
      <Routes>
        <Route
          element={
            <RouterGuard
              isValid={() =>
                user &&
                (user.nameRole === "jefe talento humano" ||
                  user.nameRole === "jefe inmediato" ||
                  user.nameRole === "default")
              }
              replaceLink="/"
            />
          }
        >
          <Route path="/home" element={<Home />} />
        </Route>
      </Routes>

      {/* Jefe Talento Humano e inmediato */}
      <Routes>
        <Route
          element={
            <RouterGuard
              isValid={() =>
                user &&
                (user.nameRole === "jefe talento humano" ||
                  user.nameRole === "jefe inmediato")
              }
              replaceLink="/"
            />
          }
        >
          <Route path="/users" element={<Users />} />
        </Route>
      </Routes>

      {/* Jefe Talento Humano */}
      <Routes>
        <Route
          element={
            <RouterGuard
              isValid={() => user && user.nameRole === "jefe talento humano"}
              replaceLink="/"
            />
          }
        >
          <Route path="/roles" element={<Roles />} />
          <Route path="/countrys" element={<Countrys />} />
          <Route path="/cities" element={<Cities />} />
          <Route path="/neighborhoods" element={<Neighborhoods />} />
          <Route path="/eps" element={<Eps />} />
        </Route>
      </Routes>
    </>
  );
};
