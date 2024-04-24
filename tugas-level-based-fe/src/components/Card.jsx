/* eslint-disable react/prop-types */
function Card({props}) {
  return (
    <div className="p-6 bg-white rounded-lg shadow-lg">
      <h2 className="mb-2 text-xl font-semibold text-gray-800">{props.title}</h2>
      <p className="text-gray-600">{props.subtitle}</p>
      <button className="px-4 py-2 mt-4 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Learn More</button>
    </div>
  )
}
export default Card