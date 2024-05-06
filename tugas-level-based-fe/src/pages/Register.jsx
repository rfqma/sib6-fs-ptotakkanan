import { Link } from "react-router-dom"

const Register = () => {
  return (
    <section className="bg-[#F4F7FF] py-20 lg:py-[120px]">
    <div className="container mx-auto">
      <div className="flex flex-wrap -mx-4">
        <div className="w-full px-4">
          <div
            className="
              relative
              mx-auto
              max-w-[525px]
              overflow-hidden
              rounded-lg
              bg-white
              py-16
              px-10
              text-center
              sm:px-12
              md:px-[60px]
            "
          >
            <div className="mb-10 text-center md:mb-16">Register</div>
            <form>
            <div className="mb-6">
                <input
                  type="text"
                  placeholder="Name"
                  className="
                    bordder-[#E9EDF4]
                    w-full
                    rounded-md
                    border
                    bg-[#FCFDFE]
                    py-3
                    px-5
                    text-base text-body-color
                    placeholder-[#ACB6BE]
                    outline-none
                    focus:border-primary
                    focus-visible:shadow-none
                  "
                />
                <div className="flex">
                  <span className="p-2 m-2 text-sm text-red-400">error</span>
                </div>
              </div>
              <div className="mb-6">
                <input
                  type="email"
                  placeholder="Email"
                  className="
                    bordder-[#E9EDF4]
                    w-full
                    rounded-md
                    border
                    bg-[#FCFDFE]
                    py-3
                    px-5
                    text-base text-body-color
                    placeholder-[#ACB6BE]
                    outline-none
                    focus:border-primary
                    focus-visible:shadow-none
                  "
                />
                <div className="flex">
                  <span className="p-2 m-2 text-sm text-red-400">error</span>
                </div>
              </div>
              <div className="mb-6">
                <input
                  type="password"
                  placeholder="Password"
                  className="
                    bordder-[#E9EDF4]
                    w-full
                    rounded-md
                    border
                    bg-[#FCFDFE]
                    py-3
                    px-5
                    text-base text-body-color
                    placeholder-[#ACB6BE]
                    outline-none
                    focus:border-primary
                    focus-visible:shadow-none
                  "
                />
                <div className="flex">
                  <span className="p-2 m-2 text-sm text-red-400">error</span>
                </div>
              </div>
              <div className="mb-10">
                <button
                  type="submit"
                  className="w-full px-4 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-700"
                >
                  Register
                </button>
              </div>
            </form>
            <Link
              to="/forgot-password"
              className="
                mb-2
                inline-block
                text-base text-[#adadad]
                hover:text-primary hover:underline
              "
            >
              Forgot Password?
            </Link>
            <p className="text-base text-[#adadad]">
              Already registered?
              <Link to="/login" className="text-primary hover:underline">
                Sign in
              </Link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  )
}

export default Register