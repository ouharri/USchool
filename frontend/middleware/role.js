export default function ({route, redirect, $auth, }) {
  const requiredRole = route.meta[0][0].role
  if (!$auth.user.roles.includes(requiredRole)) {
    $auth.logout();
    redirect('/login');
  }
}
