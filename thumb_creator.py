import os, sys
from PIL import Image

def resize(infile, output_dir, width=200, height=200):
    size=(width,height)
    outfile = "thumb\\"+os.path.splitext(infile)[0]
    extension = os.path.splitext(infile)[1]
    try:
        os.mkdir(output_dir+"\\thumb")
    except FileExistsError:
        pass
    print('--------------------------------------------')
    print("# Directory : {}".format(output_dir))
    print("Image : {}".format(output_dir+"\\"+infile))
    print("Thumb : {}".format(output_dir+"\\"+outfile+extension))
    try :
        im = Image.open(output_dir+"\\"+infile)
        im.thumbnail(size, Image.ANTIALIAS)
        im.save(output_dir+"\\"+outfile+extension)
    except IOError:
        print ("cannot reduce image for ", infile)

if __name__=="__main__":
    current_folder = os.getcwd()+"\\website"
    gallery_folder = "gallery"

    if (gallery_folder in os.listdir(current_folder)):
        work_folder = current_folder + "\\" + gallery_folder
        for dir in os.listdir(work_folder):
            for file in os.listdir(work_folder+"\\"+dir):
                if file != "thumb":

                    resize(file, work_folder+"\\"+dir)
    else:
        print("Dossier gallery non présent")