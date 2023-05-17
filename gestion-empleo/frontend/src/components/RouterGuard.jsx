import { Navigate, Outlet } from "react-router-dom";

const RouterGuard = ({ isValid, replaceLink }) => {
  if (!isValid()) {
    return <Navigate to={`${replaceLink}`} replace />;
  }
  return <Outlet />;
};

export default RouterGuard;
