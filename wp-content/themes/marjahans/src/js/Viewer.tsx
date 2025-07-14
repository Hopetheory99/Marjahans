import React, { useEffect } from "react";
import PhotoSphereViewer from "photo-sphere-viewer";

interface Props {
  imageUrl: string;
}

export default function Viewer({ imageUrl }: Props) {
  useEffect(() => {
    const viewer = new PhotoSphereViewer.Viewer({
      container: document.getElementById("viewer")!,
      panorama: imageUrl,
    });

    return () => viewer.destroy();
  }, [imageUrl]);

  return <div id="viewer" className="w-full h-96" />;
}
